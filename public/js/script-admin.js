const burgerButton = document.querySelector('.burger-button');
const navMobileAdmin = document.querySelector('.nav-mobile-admin');
burgerButton.addEventListener('click',  () => {
    navMobileAdmin.classList.toggle('nav-mobile-admin-show');
});

const btndelete = document.querySelectorAll('.btn-delete');
const popUpDelete = document.querySelectorAll('.pup-up-delete');   
const noDelete = document.querySelectorAll('.no-delete');   
for (let bD = 0; bD < btndelete.length || bD < popUpDelete.length || bD < noDelete.length; bD++) {
    btndelete[bD].addEventListener('click', () => {
        popUpDelete[bD].style.display = 'flex';
    });
    noDelete[bD].addEventListener('click', () => {
        popUpDelete[bD].style.display = 'none';
    });
}

const alertAdminContent = document.querySelector('.alert-admin-content');
setTimeout(() => {
    alertAdminContent.style.transform = 'translateY(200%)';
}, '5000');