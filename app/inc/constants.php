<?php
/**
 * This software is governed by the CeCILL-B license. If a copy of this license
 * is not distributed with this file, you can obtain one at
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt
 *
 * Authors of STUdS (initial project): Guilhem BORGHESI (borghesi@unistra.fr) and Raphaël DROZ
 * Authors of Framadate/OpenSondate: Framasoft (https://github.com/framasoft)
 *
 * =============================
 *
 * Ce logiciel est régi par la licence CeCILL-B. Si une copie de cette licence
 * ne se trouve pas avec ce fichier vous pouvez l'obtenir sur
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.txt
 *
 * Auteurs de STUdS (projet initial) : Guilhem BORGHESI (borghesi@unistra.fr) et Raphaël DROZ
 * Auteurs de Framadate/OpenSondage : Framasoft (https://github.com/framasoft)
 */

// FRAMADATE version
const VERSION = '0.9';

// Regex
const POLL_REGEX = '/^[a-z0-9]+$/i';
const CHOICE_REGEX = '/^[012]$/';
const NAME_REGEX = '/^[áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœa-z0-9_ -]+$/i';
const TITLE_REGEX = '/^[áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœa-z0-9\\/ &"\'(_)=~#{|`^@}$[\\]\\\\,;:!?.*-]+$/i';
const DESCRIPTION_REGEX = "/^[áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœa-z0-9\\/ &\"'(_)=~#{|`^@}$[\\]\\\\,;:!?.*\n-]*$/i";
const COMMENT_REGEX = "/^[áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœa-z0-9\\/ &\"'(_)=~#{|`^@}$[\\]\\\\,;:!?.*\n-]+$/i";
const BOOLEAN_REGEX = '/^(on|off|true|false|1|0)$/i';
const BOOLEAN_TRUE_REGEX = '/^(on|true|1)$/i';
const EDITABLE_CHOICE_REGEX = '/^[0-2]$/';

// CSRF (300s = 5min)
const TOKEN_TIME = 300;
