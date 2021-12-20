<?php

define('LANG_SUBSCRIPTIONS_CONTROLLER', 'Подписки');
define('LANG_SBSCR_ISSUBSCRIBE', 'Вы подписаны');
define('LANG_SBSCR_GUEST_FORM_TITLE', 'Введите данные для подписки');
define('LANG_SBSCR_GUEST_EMAIL_CONFIRMATION', 'Запрашивать для гостей подтверждение по E-mail');
define('LANG_SBSCR_GUEST_EMAIL_CONFIRM_SEND', 'Вам на E-mail выслано письмо для подтверждения подписки');
define('LANG_SBSCR_GUEST_IS_EXISTS', 'Подписка на этот E-mail уже была сделана ранее');
define('LANG_SBSCR_NEED_AUTH', 'Подписки доступны только зарегистрированным пользователям');
define('LANG_SBSCR_VERIFY_EXP', 'Время жизни ссылки подтверждения');
define('LANG_SBSCR_VERIFY_SUCCESS', 'E-mail адрес и подписка подтверждены');
define('LANG_SBSCR_ADMIN_EMAIL', 'E-mail адреса для уведомлений (можно указать несколько через запятую) о новых списках без названий');
define('LANG_SBSCR_QUEUE_NAME', 'рассылок');
define('LANG_SBSCR_LIST', 'Списки подписок');
define('LANG_SBSCR_SUBSCRIBERS', 'Подписчики');
define('LANG_SBSCR_LIMIT', 'Количество подписок на страницу во вкладке');
define('LANG_SBSCR_NOTIFY_NEW', 'Уведомлять о новых записях в подписках');
define('LANG_SBSCR_DELETE_CONFIRM', 'Удалить этот список?\nВсе подписчики будут отписаны.');
define('LANG_SBSCR_PM_NOTIFY', 'Обновление в вашем списке подписки «<a href="%s">%s</a>»<br>%s');
define('LANG_SBSCR_UNSUBSCRIBE_SUCCESS', 'Вы успешно отписались от подписки');
define('LANG_SBSCR_CTYPE_ON', 'Включить подписки');
define('LANG_SBSCR_CTYPE_RECURSIVE_CATEGORIES', 'Учитывать вложенные категории');
define('LANG_SBSCR_NOTIFY_TEXT', 'Шаблон уведомления на сайте');
define('LANG_SBSCR_NOTIFY_TEXT_HINT', 'Если не указан, будет использоваться общий. Пример текста: <b class="text-danger">'. htmlspecialchars(LANG_SBSCR_PM_NOTIFY).'</b>. %s будут заменены значениями.');
define('LANG_SBSCR_LETTER_TPL', 'Шаблон email уведомлений');
define('LANG_SBSCR_LETTER_TPL_HINT', 'Если не указан, будет использоваться общий. Пример текста шаблона system/languages/ru/letters/subscribe_new_item.txt');
define('LANG_SBSCR_LIST_TITLE', 'Заголовок списка подписки');
define('LANG_SBSCR_LIST_URL', 'URL списка подписки');
define('LANG_SBSCR_UNSUBSCRIBE_URL', 'URL отписки');
define('LANG_SBSCR_SUBJECTS_URLS', 'Список ссылок на новые записи подписки');
