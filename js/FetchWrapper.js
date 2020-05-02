/** 
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com>
*/


/**
 * Send a POST request to PHP backend with application/x-www-form-urlencoded data.
 * @param {URLSearchParams} data_obj The object that contains url-encoded data to POST.
 * @param {String} location Location of php file to post data to.
 */
 function sendURLEncodedData(data_obj,location){
    fetch(location, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
        },
        body: data_obj
    })
 }