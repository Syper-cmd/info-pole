<div class="row header mt-2">
    <div class="col-3" id="logo">
        <h4>ИнфоПоле</h4>
    </div>
    <div class="col-6"></div>
    <div class="col-3" id="enterToAdmin">
        <input type="button" class="btn btn-primary" value="Войти в админ панель" onclick="goToAdmin()">
    </div>
</div>

<script>
    function goToAdmin() {
        window.location.href = "auth.php"
    }
</script>

<style>
    .header {
        background-color: #292928;
        height: 100px;
        width: 100%;
        padding: 0 20px;
        display: flex;

        /*justify-content: center;*/
        align-items: center;
    }

    .header #enterToAdmin {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: end;
    }
</style>