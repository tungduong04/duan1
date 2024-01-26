<div class="row mb footer">
            Dự án 1
        </div>
    </div>
    <script>
        var slide = null;
        var soAnh = 0;
    function tudong(){
        slide = setInterval(function(){
            document.getElementById("anh").src = `img/100${soAnh}.jpg`;
            soAnh++;
            if(soAnh > 9){
                soAnh = 0;
            }
        },1500);
    }
    function Next(){
        soAnh++;
        if(soAnh > 9){
            soAnh = 0;
        }
        document.getElementById("anh").src = `img/100${soAnh}.jpg`;
    }
    function Pre(){
        soAnh--;
        if(soAnh < 0){
            soAnh = 9;
        }
        document.getElementById("anh").src = `img/100${soAnh}.jpg`;
    }
    tudong();
    </script>
</body>
</html>