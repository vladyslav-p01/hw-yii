/**
 * Created by user on 12.12.15.
 */
$(function(){
    window.onload = function() {
        alert("Документ загружен");
    };




    $("#user-username").click(function(){
        alert("Вы создаете нового пользователя");
        return false; // вот это он :)
    })
});