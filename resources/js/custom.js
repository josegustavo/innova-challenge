import MicroModal from 'micromodal'
import Sortable from 'sortablejs';

MicroModal.init({
    openTrigger: 'data-custom-open',
});

var el = document.getElementById('menu-interests-edit-items');
var sortable = Sortable.create(el);
