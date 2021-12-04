<form>
    <label for="firstName" class="first-name">First Name</label>
    <input id="firstName" type="text">

    <label for="lastName" class="last-name">Last Name</label>
    <input id="lastName" type="text">

    <!-- more inputs -->
</form>
<style>
form {
    overflow: hidden;
}

label {
    float: left;
    width: 200px;
    padding-right: 24px;
}

input {
    float: left;
    width: calc(100% - 200px);
}

button {
    float: right;
    width: calc(100% - 200px);
}
</style>