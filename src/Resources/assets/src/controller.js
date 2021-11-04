'use strict';

import { Controller } from 'stimulus';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';

export default class extends Controller {
    connect() {
        const config = JSON.parse(atob(this.element.getAttribute('data-config')));
        this.fp = flatpickr(this.element, config);
    }
}
