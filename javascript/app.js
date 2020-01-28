//Keep track of last id pulled
document.onload = getStuff();

let postIdTracker;
const postContainer = document.querySelector('.flex-container');

//grab initial set of posts when page loads
function getStuff() {

    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'initial-posts.php', true);
    
    xhr.onload = function() {
        if(this.status === 200) {
            jsonResponseObject = JSON.parse(this.responseText);
 

            for(i = 0; i < Object.keys(jsonResponseObject).length; i++) {
                let url = "href=post.php?id=" + jsonResponseObject[i].id;
                postContainer.innerHTML = postContainer.innerHTML + 
                "<article class='post-div flex-item'> <h2>" + jsonResponseObject[i].title + "</h2</article> <br> <small>Created - " + jsonResponseObject[i].create_date + "</small> <br> <h3>By - " + jsonResponseObject[i].author + "</h3> <br> <p>" + jsonResponseObject[i].preview +"</p> <a class='read-more-button' " + url + ">More</a>";

            }

        }
    }

    xhr.send();
}


//Submit email sign up
const responseMessageParagraph = document.getElementById('response-message-paragraph');
document.getElementById('email-signup-form').addEventListener('submit', sendForm);

function sendForm(event) {
    event.preventDefault();

    let firstName = document.getElementById('first-name').value;
    let lastName = document.getElementById('last-name').value;
    let email = document.getElementById('email').value;

    let params = "firstname="+firstName+"&lastname="+lastName+"&email="+email;

    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'form-processing.php', true);

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onprogress = function() {
        responseMessageParagraph.innerHTML = "Sending...";
    }

    xhr.onload = function() {
        if(this.status === 200) {
            responseMessageParagraph.innerHTML = this.responseText;
            document.getElementById('email-signup-form').reset();
        }
    }

    xhr.send(params);
}







