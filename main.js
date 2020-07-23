document.querySelector('.bars').addEventListener('click',()=>{
    document.querySelector('.slider').classList.toggle('show')
})

document.querySelector('.close').addEventListener('click',()=>{
    document.querySelector('.slider').classList.remove('show')
})


var menus = document.querySelector('.menues')
