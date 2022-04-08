let animItems = document.querySelectorAll('._anim');

if(animItems.length > 0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll() {
        for (let index = 0; index < animItems.length; index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if(animItemHeight>window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }
            
            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('_active');
            } else {
                if(!animItem.classList.contains('_animNoNe')){
                   animItem.classList.remove('_active'); 
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    } 
    setTimeout(() => {
    animOnScroll()
    }, 300);
}
let animItems2 = document.querySelectorAll('._anim2');

if(animItems2.length > 0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll() {
        for (let index = 0; index < animItems2.length; index++) {
            const animItem = animItems2[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if(animItemHeight>window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }
            
            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('_active');
            } else {
                if(!animItem.classList.contains('_animNoNe')){
                   animItem.classList.remove('_active'); 
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    } 
    setTimeout(() => {
    animOnScroll()
    }, 300);
}