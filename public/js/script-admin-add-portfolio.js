const statusSelect = document.querySelector('.status');
const webLink = document.querySelector('.web_link');
const webLinkTwo = document.querySelector('.web_link_two');
const webRepo = document.querySelector('.web_repo');
const webRepoTwo = document.querySelector('.web_repo_two');
statusSelect.addEventListener('change', function() {
    if(statusSelect.value === 'Publish') {
        webLink.style.display = 'block';
        webLinkTwo.style.display = 'block';
        webRepo.style.display = 'block';
        webRepoTwo.style.display = 'block';
        webLinkTwo.required = true;
        webRepoTwo.required = true;
    } else {
        webLink.style.display = 'none';
        webLinkTwo.style.display = 'none';
        webRepo.style.display = 'none';
        webRepoTwo.style.display = 'none';
        webLinkTwo.value = '';
        webRepoTwo.value = '';
        webLinkTwo.required = false;
        webRepoTwo.required = false;
    }
});

function priviewImg() {
    const imgPreview = document.querySelector('.img-preview');
    const inputImg = document.querySelector('.inputImg');

    const ofReader = new FileReader();
    ofReader.readAsDataURL(inputImg.files[0]);
    ofReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

function priviewImgDetail() {
    const imgPreviewDetail = document.querySelector('.img-preview-detail');
    const inputImgDetail = document.querySelector('.inputImgDetail');

    const ofReader = new FileReader();
    ofReader.readAsDataURL(inputImgDetail.files[0]);
    ofReader.onload = function(oFREvent) {
        imgPreviewDetail.src = oFREvent.target.result;
    }
}