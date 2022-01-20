// Contact popup
const projectsButtons = document.querySelectorAll('.projects .button');
const projectsPopups = document.querySelectorAll('.project-popup');
const exitPopups = document.querySelectorAll('.project_x');

const contactPopupBtn = document.querySelector('.send_message');
const contactPopup = document.querySelector('.contact-popup');
const contactPopupExit = contactPopup.querySelector('#contact_x');

const selectProjectPopup = (e) => {
    if(e.target.matches('#project1'))
    {
        openProjectPopup('project1-popup');
    }
    else if(e.target.matches('#project2'))
    {
        openProjectPopup('project2-popup');
    }
    else if(e.target.matches('#project3'))
    {
        openProjectPopup('project3-popup');
    }
}

const openProjectPopup = (chosedPopup) => {
    projectsPopups.forEach(el => {
        if(el.classList.contains(chosedPopup))
        {
            el.classList.add('project-popup--active');
        }
        else
        {
            el.classList.remove('project-popup--active')
        }
    })
}

const exitPopup = (e) => {
    const currentPopup = e.target.closest('.project-popup');
    currentPopup.classList.remove('project-popup--active');
}

const openContactPopup = () => {
    contactPopup.classList.toggle('contact-popup--active');
    projectsPopups.forEach(el => el.classList.remove('project-popup--active'))
}

const exitContactPopup = () => {
    contactPopup.classList.remove('contact-popup--active');
}


// AddEventListeners
projectsButtons.forEach(el => {
    el.addEventListener('click', selectProjectPopup);
})

exitPopups.forEach(el => {
    el.addEventListener('click', exitPopup);
})

contactPopupBtn.addEventListener('click', openContactPopup);
contactPopupExit.addEventListener('click', exitContactPopup);

