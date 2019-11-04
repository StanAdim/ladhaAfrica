
function showExplore() {
        document.querySelector('.explore-menu').classList.toggle('show');
        document.querySelector('.advertise-menu').classList.remove('show');
        document.querySelector('.advertise-title').classList.toggle('hide');
        document.querySelector('.account-menu').classList.remove('show');
        document.querySelector('.account-title').classList.toggle('hide');


}
function showAdvertise() {
      document.querySelector('.advertise-menu').classList.toggle('show');
      document.querySelector('.explore-menu').classList.remove('show');
      document.querySelector('.explore-title').classList.toggle('hide');
      document.querySelector('.account-menu').classList.remove('show');
      document.querySelector('.account-title').classList.toggle('hide');



}

function showAccount() {
      document.querySelector('.account-menu').classList.toggle('show');
      document.querySelector('.explore-menu').classList.remove('show');
      document.querySelector('.advertise-menu').classList.remove('show');


}
