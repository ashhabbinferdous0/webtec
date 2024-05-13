const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function() {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        });
        li.classList.add('active');
    });
});



const menuBar = document.quarySelector('#content nav .bx.bx-menu');
const sideBar = document.getElementById('sideBar');

menubar.addEventListener('click', function(){
    sideBar.classList.toggle('hide')
})



const searchButton =document.querySelector('#content nav form .form-input button');
const searchButtonicon =document.querySelector('#content nav form .form-input button');
    const searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click',function (a){
        e.parentDafault();
        searchForm.classList.toggle('show');
        if(searchForm.classList.contains('show')){
            searchButtonicon.classList.replace('bx-search','bx-x');
        }else{
            searchButtonicon.classList.replace('bx-search','bx-x');
        }
    
    })



    if(window.innerWidth< 768){
        sidebar.classList.add('hide');
    }else if (window.innerWidth< 576){
        searchButtonicon.classList.replace('bx-x','bx-search');
        searchForm.classList.remove('show')
        
    }

    window.addEventListener('resize',function() {
        if(this.innerWidth<576){
            searchButtonicon.classList.replace('bx-x','bx-search');
        searchForm.classList.remove('show')

        }
        
    })
    