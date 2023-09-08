<style>     
.progress-bar-vertical {
    width: 20px;
    min-height: 200px;
    margin-right: 20px;
    background: #d0cece;
    display: -webkit-box;  
    display: -ms-flexbox;  
    display: -webkit-flex; 
    display: flex;        
    align-items: flex-end;
    -webkit-align-items: flex-end;
    border: solid 2px;
}

.progress-bar-vertical .progress-bar {
    width: 100%;
    height: 0;
    transition: height 0.6s ease;
    border-width: 10px;
    border-color: transparent;    
}

.progress-striped1 {
    background: linear-gradient(180deg, <?php echo $bin1ButtonColor; ?>, #f2f2f2, <?php echo $bin1ButtonColor; ?>);
    background-size: 100% 200%;
    animation: wavecolor1 20s infinite; /* Use waveColor1 for the first button */
}

@keyframes wavecolor1 {
    0% {
        background-position: 50% -100%;
    }
    50% {
        background-position: 50% 100%;
    }
    100% {
        background-position: 50% -100%;
    }
}
.progress-striped2 {
    background: linear-gradient(180deg, <?php echo $bin2ButtonColor; ?>, #f2f2f2, <?php echo $bin2ButtonColor; ?>);
    background-size: 100% 200%;
    animation: waveColor2 10s infinite; /* Use waveColor2 for the second button */
}

/* CSS for the first animation */

@media (max-width: 768px) {
.progress-bar-vertical {
    min-height: 150px;
    margin-right: 10px;
    }

.progress-bar-vertical .progress-bar {
    transition: height 0.4s ease;
    }
}

    @media (max-width: 576px) {
.progress-bar-vertical {
    min-height: 100px;
    margin-right: 5px;
    }

.progress-bar-vertical .progress-bar {
    transition: height 0.3s ease;
    }
}

.custom-button {
    margin-top: 10px;
}

.progress-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

.heading-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.dataTables_wrapper {
    background-color:white;
    padding:10px;
    border-radius:0.5rem;
}

.dt-center {
        text-align: center;
    }

.custom-button1 {
    margin-left: 15px;
    width: 70px;
    height: 70px;
    border-radius: 0.5rem;
    background: linear-gradient(180deg, <?php echo $bin1ButtonColor; ?>, #f2f2f2, <?php echo $bin1ButtonColor; ?>);
    background-size: 100% 200%;
    animation: waveColor1 10s infinite;
}

@keyframes waveColor1 {
    0% {
        background-position: 0 0; 
    }
    100% {
        background-position: 0 -100%; 
    }
}

.custom-button2 {
    margin-left: 15px;
    width: 70px;
    height: 70px;
    border-radius: 0.5rem;
    background: linear-gradient(180deg, <?php echo $bin2ButtonColor; ?>, #f2f2f2, <?php echo $bin2ButtonColor; ?>);
    background-size: 100% 200%;
    animation: waveColor2 10s infinite;
}

@keyframes waveColor2 {
    0% {
        background-position: 0 0; 
    }
    100% {
        background-position: 0 -100%; 
    }
}

.square-red {
    margin-left: 15px;
    width: 70px;
    height: 70px;
    border-radius: 0.5rem;
    background: linear-gradient(180deg, #fd100f, #f2f2f2, #fd100f);
    background-size: 100% 200%;
    animation: waveColor 10s infinite;
}

@keyframes waveColor {
    0% {
        background-position: 50% -100%;
    }
    50% {
        background-position: 50% 100%; 
    }
    100% {
        background-position: 50% -100%; 
    }
}

.square-orange {
    margin-left: 15px;
    width: 70px;
    height: 70px;
    border-radius: 0.5rem;
    background: linear-gradient(180deg, #fdb81c, #f2f2f2, #fdb81c);
    background-size: 100% 200%; 
    animation: waveColor 10s infinite;
}

@keyframes waveColor {
    0% {
        background-position: 50% -100%; 
    }
    50% {
        background-position: 50% 100%; 
    }
    100% {
        background-position: 50% -100%; 
    }
}

.square-green {
    margin-left: 15px;
    width: 70px;
    height: 70px;
    border-radius: 0.5rem;
    background: linear-gradient(180deg, #48b314, #f2f2f2, #48b314);
    background-size: 100% 200%;
    animation: waveColor 10s infinite;
}

@keyframes waveColor {
    0% {
        background-position: 50% -100%; 
    }
    50% {
        background-position: 50% 100%; 
    }
    100% {
        background-position: 50% -100%;
    }
}

.progress-text {
    font-size: 30px; 
    color: black; 
    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
}

.dropdown-dash{
    display: flex; 
    justify-content: flex-end;
    text-align:right;
    margin:25px;
    margin-top:-60px;
}
.select-success{
    background-color:white;
    color:black;
    padding:5px 10px;
    border:1px solid black;
    border-radius:0.5rem;
    
}

.btn-add-bin{
    margin-left:7px;
    border-radius:0.5rem;
    padding:0;
}
.btn-add-bin i{
    font-size:20px;
}
.form-group{
    margin-top:20px;
}

.form-group label{
    font-weight:bold;
}

.form-control{
    color:black;
}
.location-btn {
background: none;
    border: none;
    padding: 0;
    position: inherit;
    top: 0;
    left: 0;
    width: 25px; /* Adjust the width as needed */
    height: 25px; /* Adjust the height as needed */
    justify-content:center;
}

.btnicon {
    font-size: 25px;
}

 /* Style for DataTables Buttons */
 .dt-buttons {
        margin-bottom: 10px;
        text-align:left;
}

.column-value {
    margin-bottom: 10px; /* You can adjust the margin value as needed */
    display: block; /* This ensures proper spacing */
}

.bin2-value {
    margin-top: 10px; /* You can adjust the margin value as needed */
    display: block; /* This ensures proper spacing */
}

.dt-buttons{
    margin-left:20px;
}

.trash-table{
    text-align:left;
    margin-bottom:-5px;
}
.dash-footer{
    border:0px solid black;
    background-color:white;
}

.containertab {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .trash-table {
    flex: 1;
  }

  .btn-containertab {
    flex: 1;
    text-align: right;
    margin-top:-30px;
  }
</style>