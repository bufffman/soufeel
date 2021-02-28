let mybtn = document.getElementById('myBtn');
let closeModal = document.querySelector('.close-modal');

// When click on button > show modal window (filter)
mybtn.addEventListener('click', function() {
    document.getElementById('myModal').classList.add('showModal');
});

// When click on button > body dont have scroll
mybtn.addEventListener('click', function() {
    document.getElementById('body').classList.add('modal-open-hidden-scroll');
});

// When click on button > class whith delete show modal, removes
mybtn.addEventListener('click', function() {
    document.getElementById('myModal').classList.remove('notShowModal');
    });

    // When click on close button > modal window get class, with give show
closeModal.addEventListener('click', function() {
    document.getElementById('myModal').classList.add('notShowModal');
});

// When click on close button > modal window remove class, with delete scroll in body
closeModal.addEventListener('click', function() {
    document.getElementById('body').classList.remove('modal-open-hidden-scroll');
});