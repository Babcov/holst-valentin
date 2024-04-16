/**
 * Функция для выполнения AJAX-запросов с использованием библиотеки jQuery.
 * @param {string} url - URL, по которому отправляется запрос.
 * @param {string} method - HTTP метод запроса (GET, POST и т.д.).
 * @param {object} data - Данные, которые будут отправлены на сервер (опционально).
 * @param {function} successCallback - Функция обратного вызова при успешном выполнении запроса.
 * @param {function} errorCallback - Функция обратного вызова при возникновении ошибки.
 */
function ajaxRequest(url, method, data, successCallback, errorCallback) {
    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function(response) {
            if (successCallback && typeof successCallback === 'function') {
                successCallback(response);
            }
        },
        error: function(xhr, status, error) {
            if (errorCallback && typeof errorCallback === 'function') {
                errorCallback(error);
            }
        }
    });
}
