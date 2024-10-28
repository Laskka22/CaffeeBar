/*Esta funcion valida si las contraseñas coinciden, en caso de que no coincidan la funcion retorna false y si coinciden retorna true.*/
function validateform() {
    const password=document.getElementById("pass_registro").value();/*Aqui se le asigna el valor de la caja de tezto llamada pass_registro, la cual se extrae desde el formulario form_registrarse */
    const confirmPassword=document.getElementById("confirm_pass").value();/*en esta linea de codigo permite asignar el valor a la constante confirmPassword la cual se extrae de la caja ed texto llamado confirm_pass, que se encuentra en form_registrarse. */

    /*En este condicional se verifica que las contraseñas (passwor) coincidan, en caso de que no coincidan devuelve un false y borra el formulario y si coinciden devuelve un true y retorna al formulario de form_login.php */
    if(password!==confirmpassword) {
        alert("Las contaseñas no coinciden");
        document.getElementById("form").reset();
        return false;
    }
    document.getElementById("form").reset();
        return true;
}