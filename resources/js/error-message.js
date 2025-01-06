document.addEventListener('DOMContentLoaded', () => {
    const errorMessage = document.querySelectorAll('.error-message')
    const errorBorder = document.querySelectorAll('.error-border')
    
    errorBorder.forEach((e, i) => {
        e.addEventListener('focus', () => {
            if(errorMessage[i])
            {
                errorMessage[i].style.display = 'none'
            }

            e.classList.remove('border-red-500')
            e.classList.add('border-gray-300')
        })
    })



    // setTimeout(() => {
    //     errorBorder.forEach(e => {
    //         e.classList.remove('border-red-500')
    //         e.classList.add('border-grey-500')
    //     })


    //     errorMessage.forEach(e=>{
    //         e.style.display = 'none'
    //     })
    // }, 5000)
})