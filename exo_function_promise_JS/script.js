function load_script(script_filename_js)
{
    return new Promise((resolve, reject)=>{
        // create tag <script src='script_filename_js'> inside head tag into index.php
        let element = document.createElement('script');
        element.src = script_filename_js;
        document.head.append(element);
        
        // resolve
        element.onload = () => resolve('loading file '+ script_filename_js +' is ok');
        // reject
        element.onerror = () => reject(new Error('loadind file '+ script_filename_js +' is failed'));
    });
}

/*
****** call function ******
*/

// method #1
// const func_promise_name = load_script('test.js');
// func_promise_name.then(resolve => console.log(resolve), error => console.log(error));

// method #2
load_script('test.js').catch(console.log);
