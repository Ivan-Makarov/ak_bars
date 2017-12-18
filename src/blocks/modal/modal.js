function activateModals() {
    const openModalBtns = [...document.querySelectorAll('.modal-link')]
    const body = document.querySelector('.body');
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modal = document.querySelector(`.modal[data-modal="${e.currentTarget.dataset.modal}"]`);
            modal.classList.remove('hidden');
            body.classList.add('noscroll');

            modal.addEventListener('click', (e) => {
                e.preventDefault();
                if (e.target == modal) {
                    modal.classList.add('hidden');
                    body.classList.remove('noscroll')
                }
            });
        });
    })
}

document.addEventListener('DOMContentLoaded', activateModals);
