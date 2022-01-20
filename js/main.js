const projectsBtn = document.querySelector('.my-projects-btn');
const projectsSection = document.querySelector('.projects');
const title = document.querySelector('.title');

const showProjects = async () => {
    projectsBtn.remove();
    title.classList.add('title-animation');

    await new Promise(r => setTimeout(r, 1800));

    projectsSection.classList.add('projects--active');
    projectsSection.classList.add('projects-animation');
}

projectsBtn.addEventListener('click', showProjects);