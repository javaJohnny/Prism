// LIKE/DISLIKE //
$(document).ready(function(){

    let postId = 0;
    $('.like').on('click', function(event) {
        event.preventDefault();
        postId = event.target.parentNode.parentNode.dataset['postid'];
        let isLike = event.target.previousElementSibling == null;
        $.ajax({
            method: 'POST',
            url: urlLike,
            data: {isLike: isLike, postId: postId, _token: token}
        })
        .done(() => {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'Liked' : 'Like' : event.target.innerText == 'Dislike' ? 'Disliked' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
        })
    });

    $('#alert').on('click', (event) => {
        alert('hello');
        event.preventDefault();
    });
})
