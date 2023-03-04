// navigasi akan muncul ketika discrool ke atas dan akan hilang jika di scroll ke bawah
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
const navDesktop = document.querySelector(".nav-desktop");
    if (prevScrollpos > currentScrollPos) {
        navDesktop.style.top = "0";
    } else {
        navDesktop.style.top = "-150px";
    }
    prevScrollpos = currentScrollPos;
}

// profil dan list navigasi desktop akan menambahkan shadow jika di scroll lebih besar dai 100px
const profil = document.querySelector('.profil');
const listNavDesktop = document.querySelector('.listNavDesktop');
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
    profil.classList.add("nav-shadow");
    listNavDesktop.classList.add("nav-shadow");
    } else {
    profil.classList.remove("nav-shadow");
    listNavDesktop.classList.remove("nav-shadow");
    }
});

const cardPortfolio = document.querySelectorAll(".card-portfolio");
const detailPortfolio = document.querySelectorAll(".detail-portfolio");
const containerDetailPortfolio = document.querySelectorAll(".containerDetailPortfolio");
const body = document.querySelector("body");
const closeDetailPortfolio = document.querySelectorAll(
    ".close-detail-portfolio"
);

// menampilkan pop up detail portfolio
for (
    let cP = 0;
    cP < cardPortfolio.length ||
    cP < detailPortfolio.length ||
    cP < closeDetailPortfolio.length ||
    cP < containerDetailPortfolio.length;
    cP++
) {
    cardPortfolio[cP].addEventListener("click", () => {
        detailPortfolio[cP].classList.add("flex-detail-portfolio");
        body.classList.add("overflow-hidden");
        containerDetailPortfolio[cP].style.transform = "translateY(0)";
        containerDetailPortfolio[cP].style.transition = "0.3s";
    });
    closeDetailPortfolio[cP].addEventListener("click", () => {
        setTimeout(() => {
            detailPortfolio[cP].classList.remove("flex-detail-portfolio");
            body.classList.remove("overflow-hidden");
        }, 300);
        containerDetailPortfolio[cP].style.transform = "translateY(100%)";
        containerDetailPortfolio[cP].style.transition = "0.3s";
    });
}

// memberikan alert jika sebuah portfolio masih dalam pengembangan
const noLink = document.querySelectorAll(".no-link");
const masihPengembangan = document.querySelector(".masih-pengembangan");
const navMobile = document.querySelector(".nav-mobile");
const masihPengembanganDua = document.querySelector(".masih-pengembangan-dua");
for (let nL = 0; nL < noLink.length; nL++) {
    noLink[nL].addEventListener("click", () => {
        masihPengembangan.style.display = "flex";
        masihPengembanganDua.style.transform = "translateY(10%)";
        masihPengembanganDua.style.transition = "1s";
        body.classList.add("overflow-hidden");
        navMobile.classList.add("nav-mobile-hide");
    });
}
masihPengembangan.addEventListener("click", () => {
    masihPengembanganDua.style.transform = "translateY(1000%)";
    masihPengembanganDua.style.transition = "1s";
    body.classList.remove("overflow-hidden");
    setTimeout(() => {
        masihPengembangan.style.display = "none";
        navMobile.classList.remove("nav-mobile-hide");
    }, "100");
});
const noLinkDetail = document.querySelectorAll(".no-link-detail");
const masihPengembanganDetail = document.querySelector(
    ".masih-pengembangan-detail"
);
const masihPengembanganDuaDetail = document.querySelector(
    ".masih-pengembangan-dua-detail"
);
for (let nLD = 0; nLD < noLinkDetail.length; nLD++) {
    noLinkDetail[nLD].addEventListener("click", () => {
        masihPengembanganDetail.style.display = "flex";
        masihPengembanganDuaDetail.style.transform = "translateY(10%)";
        masihPengembanganDuaDetail.style.transition = "1s";
    });
}
masihPengembanganDetail.addEventListener("click", () => {
    masihPengembanganDuaDetail.style.transform = "translateY(1000%)";
    masihPengembanganDuaDetail.style.transition = "1s";

    setTimeout(() => {
        masihPengembanganDetail.style.display = "none";
    }, "100");
});

// memberikan alert pesan berhasil atau gagal
const contactMessage = document.querySelector(".contact-message");
const theMessage = document.querySelector(".the-message");
contactMessage.addEventListener("click", () => {
    theMessage.style.transform = "translateY(1000%)";
    theMessage.style.transition = "1s";
    window.location = "#contact";
    setTimeout(() => {
        contactMessage.style.display = "none";
    }, "100");
});

// untuk memvalidasi penulisan contac untuk melakukan message
function messageCheck() {
    const inputName = document.querySelector(".inputName").value.replace(/\s/g,'');
    const inputEmail = document.querySelector(".inputEmail");
    const inputMessage = document.querySelector(".inputMessage").value.replace(/\s/g,'');
    let validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    const buttonSend = document.querySelector(".buttonSend");
    const send = document.querySelector(".send");
    const line = document.querySelector(".line");
    const bullet = document.querySelector(".bullet");

    const keteranganName = document.querySelector(".keteranganName");
    const keteranganEmail = document.querySelector(".keteranganEmail");
    const keteranganMessage = document.querySelector(".keteranganMessage");

    if (inputName.length < 3) {
        keteranganName.style.display = "block";
    } else {
        keteranganName.style.display = "none";
    }

    if (inputEmail.value.match(validRegex)) {
        keteranganEmail.style.display = "none";
    } else {
        keteranganEmail.style.display = "block";
    }

    if (inputMessage.length < 5) {
        keteranganMessage.style.display = "block";
    } else {
        keteranganMessage.style.display = "none";
    }

    if (
        inputName.length > 2 &&
        inputEmail.value.length > 4 &&
        inputEmail.value.match(validRegex) &&
        inputMessage.length > 4
    ) {
        buttonSend.disabled = false;
        buttonSend.style.opacity = "1";
        send.style.color = "#1D1D1E";
        line.style.backgroundColor = "#1D1D1E";
        bullet.style.backgroundColor = "#1D1D1E";
    } else {
        buttonSend.disabled = true;
        buttonSend.style.opacity = "0.1";
        send.style.color = "#696969";
        line.style.backgroundColor = "#696969";
        bullet.style.backgroundColor = "#696969";
    }
}