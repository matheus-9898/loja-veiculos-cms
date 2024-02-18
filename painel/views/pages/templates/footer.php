</div>
    </main>
    <script src="views/js/jquery.js"></script>
    <script src="views/js/notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.inputmask').inputmask();
            $('.contAddVeic input[name=km]').inputmask({numericInput: true});
            $('.contAddVeic input[name=valor]').inputmask({numericInput: true});
        });
    </script>
</body>
</html>