class Modal {
  constructor(overlay) {
    this.overlay = overlay;
    const closeButton = overlay.querySelector('.button-close-employed')
    closeButton.addEventListener('click', this.close.bind(this));
    overlay.addEventListener('click', e => {
      if (e.srcElement.id === this.overlay.id) {
        this.close();
      }
    });
  }
  open() {
    this.overlay.classList.remove('is-hidden');
  }

  close() {
    this.overlay.classList.add('is-hidden');
    this.overlay.classList.remove('is-visible');
  }
}
const modal = new Modal(document.querySelector('.modal-overlay-employed'));
window.openModal = modal.open.bind(modal);



if (!sessionStorage.getItem('employed')) {
  sessionStorage.setItem('employed', true);

  window.openModal();

}
else {
  modal.overlay.classList.add('is-hidden');
}
