import './bootstrap';
import 'preline'

// Fix Mobile Navbar
document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})