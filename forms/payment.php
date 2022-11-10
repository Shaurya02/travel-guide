<html>
    <head>
        <style>
            body{
                background-color: #153462;
            }
            .formdiv{
                margin: 5% 20%;
                padding: 2%;
                background-color: #3A8891;
            }
            h3,p{
                color: white;
                display: inline;
            }
            input,select{
                padding: 0 1%;
                width: 200px;
                height: 30px;
                border: 1px solid grey;
                border-radius: 5px;
            }
            button{
                border: none grey;
                background-color: #3A8891;
                color: white;
                border-radius: 5px;
            }
            input[type=number] {
                /*for absolutely positioning spinners*/
                position: relative; 
                padding: 5px;
                padding-right: 25px;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                opacity: 1;
            }

            input[type=number]::-webkit-outer-spin-button, 
            input[type=number]::-webkit-inner-spin-button {
                -webkit-appearance: inner-spin-button !important;
                width: 25px;
                position: absolute;
                top: 0;
                right: 0;
                height: 100%;
            }
        </style>
        <script>
            
        </script>
    </head>
    <body>
        <div class="formdiv">
            <form id="scubaform" method="post">
                <h1>Trip booking</h1>
                <hr><br>
                <h3 style="margin-left: 5%">Name  </h3><p style="color: red">*</p>
                <input type="text" name="fname" id="fname" placeholder="First name" style="margin-left: 35%">
                <input type="text" name="lname" id="lname" placeholder="Last name" style="margin-left: 1%">
                <br><br>
                <h3 style="margin-left: 5%">Email  </h3><p style="color: red">*</p>
                <input type="email" name="email" id="email" placeholder="Email" style="margin-left: 35%; width: 413px">
                <br><br>
                <h3 style="margin-left: 5%">Package name  </h3><p style="color: red">*</p>
                <select name="package" id="package" style="margin-left: 27.6%; width: 413px">
                    <option value="lak-samudram">Lakshadweep Samudram</option>
                    <option value="swaying-palm">Swaying Palm Package</option>
                    <option value="kadmat-island">Kadmat Island Resort</option>
                    <option value="kavaratti-island">Kavaratti Island Resort</option>
                    <option value="silver-sand">Silver Sand/One Island Tourist</option>
                    <option value="tents-thinnakara">Tents In Thinnakara</option>
                    <option value="cottages-bangaram">Cottages In Bangaram</option>
                    <option value="scuba-dive">Scuba Dive Package</option>
                </select><br><br>
                <h3 style="margin-left: 5%">Number of Adults  </h3><p style="color: red">*</p>
                <input type="number" name="adults" id="adults" value="1" step="1" min="1" max="10" style="margin-left: 24.3%; width: 413px"><br><br>
                <h3 style="margin-left: 5%">Number of Children  </h3><p style="color: red">*</p>
                <input type="number" name="children" id="children" value="1" step="1" min="0" max="10" style="margin-left: 22.1%; width: 416px"><br><br>

            </form>
        </div>
    </body>
</html>