// 11 Jun 2024, 4:57 PM
tinymce.init({
    selector: 'textarea#tiny', // textarea of the id 'tiny'
    menubar: false, // hiding the menubar 'File Edit ...'
    height: 300, // textarea height
    plugins: 'lists', // 27 Jun 2024, 4:50 AM
    // 'numlist bullist' added to the toolbar on 27 Jun 2024, 4:50 AM 
    toolbar: 'bold italic underline alignleft aligncenter alignright alignjustify numlist bullist'
});