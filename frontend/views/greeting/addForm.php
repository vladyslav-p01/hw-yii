<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.11.15
 * Time: 18:57
 */
?>

<form action="index.php" method="get">
    <fieldset>
        <legend>Enter numbers for adding</legend>
        <label for="number_a">a: </label>
        <input type="text" name="a" id="number_a">
        <label for="number_b">b: </label>
        <input type="text" name="b" id="number_b">
        <input type="submit">
        <input type="hidden" name="r" value="greeting/add">
    </fieldset>
    <label>
</form>