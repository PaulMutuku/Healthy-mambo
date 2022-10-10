<style type="text/css">
body{
    background:#0F2027;
    background:-webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027) ;
    background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
}

#join-btn{
    position: fixed;
    top:50%;
    left:50%;
    margin-top:-50px;
    margin-left:-100px;
    font-size:18px;
    padding:20px 40px;
}

#video-streams{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    height: 90vh;
    width: 1400px;
    margin:0 auto;
}

.video-container{
    max-height: 100%;
    border: 2px solid black;
    background-color: #203A49;
}

.video-player{
    height: 100%;
    width: 100%;
}

button{
    border:none;
    background-color: cadetblue;
    color:#fff;
    padding:10px 20px;
    font-size:16px;
    margin:2px;
    cursor: pointer;
}

#stream-controls{
    display: none;
    justify-content: center;
    margin-top:0.5em;
}

@media screen and (max-width:1400px){
    #video-streams{
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        width: 95%;
    }
}
</style>