let language = "py";

function python(){
    const codeBlock = document.getElementById("code");
    const tab = "&emsp;";
    const visible_tab = `${tab}${tab}`;
    let pythonCode =`
    import requests<br>
    from playsound import playsound<br><br>
    try:<br>
    ${visible_tab}request=requests.post('https://api.website.com/',<br>
    ${visible_tab}${visible_tab}files={<br>
        ${visible_tab}${visible_tab}${visible_tab}[likes],[dislikes]<br>
        ${visible_tab}${visible_tab}},<br>
        ${visible_tab}${visible_tab}headers={'x-api-key': 'YOUR-API-KEY'}<br>
        ${visible_tab})<br>
        ${visible_tab}playsound(request.audio)<br>
        except NoKeyException:<br>
        ${visible_tab}print("Invalid key")<br>
        `;
    codeBlock.innerHTML = pythonCode;
    language = "py";
    showpy();
    hidejs();
    hidejava();
}

function showpy(){
    const py = document.getElementById("py");
    py.style.backgroundColor = "lightgrey";
}
function hidepy(){
    const py = document.getElementById("py");
    if (language != "py"){
        py.style.backgroundColor = "inherit";
    }
}
function java(){
    const codeBlock = document.getElementById("code");
    const tab = "&emsp;";
    const visible_tab = `${tab}${tab}`;
    let javacode = `
    HttpURLConnection podcast = (HttpURLConnection) url.openConnection();<br>
    podcast.setRequestMethod("GET");<br>
    Map <String, String[]> params = new HashMap<>();<br>
    params.put("likes", ["Likes"]);<br>
    params.put("dislikes", ["Dislikes"]);<br>
    params.put("key", "Your Key")<br>
    podcast.setDoOutput(true);<br>
    DataOutputStream out = new DataOuptputStream(podcast.getOutputStream));<br>
    out.writeBytes(ParamaterArrayBuilder.get(ParamsString[](params)));<br>
    AudioInputStream audioInputStream = AudioSystem.getAudioInputStream(out.audio);<br>
    Clip clip = AudioSystem.getClip();<br>
    clip.open(audioInputStream);<br>
    clip.start();<br>
    clip.loop(Clip.LOOP_CONTINUOUSLY);<br>
    clip.stop();<br>
    clip.close();
    `;
    codeBlock.innerHTML = javacode;
    language = "java";
    showjava();
    hidepy();
    hidejs();
}
function showjava(){
    const java = document.getElementById("java");
    java.style.backgroundColor = "lightgrey";
}
function hidejava(){
    const java = document.getElementById("java");
    if (language != "java"){
        java.style.backgroundColor = "inherit";
    }
}
function javascript(){
    const js = document.getElementById('js');
    const codeBlock = document.getElementById('code')
    const tab = "&emsp;"
    const visible_tab = `${tab}${tab}`;
    let jscode = `
    const form = new FormData();<br>
    form.append("likes", ["likes"]);<br>
    form.append("dislikes", ["dislikes"]);<br>
    <br>
    fetch('www.api.website.com/', {<br>
    ${visible_tab}method: 'POST',<br>
    ${visible_tab}headers: {<br>
    ${visible_tab}${visible_tab}'api-key': YOUR_API_KEY,<br>
    ${visible_tab}},<br>
    ${visible_tab}body: form,<br>
    })<br>
    ${visible_tab}.then(response => response.arrayBuffer())<br>
    ${visible_tab}.then(buffer => {<br>
      })
    `;
    codeBlock.innerHTML = jscode;
    language = "js";
    hidejava();
    hidepy();
}
function showjs(){
    const js = document.getElementById('js');
    js.style.backgroundColor = "lightgrey";
    hidepy();
    hidejava();
}
function hidejs(){
    const js = document.getElementById("js");
    if (language != "js"){
        js.style.backgroundColor = "inherit";
    }
}