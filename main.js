function search(name) {
    // console.log(name);
    fetchSearchData(name);

}

function fetchSearchData(name) {
    fetch('search.php',{
        method:'POST',
        body: new URLSearchParams('name=' + name)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res))
        .catch(e => console.error('Error:' + e))
}

function viewSearchResult(data) {
    const dataViewer = document.querySelector('#dataViewer');
    console.log(dataViewer);
    dataViewer.innerHTML = "";
    for (let i=0;i< data.length;i++){
        const li = document.createElement('li');
        // li.innerHTML = data[i]['Displayname'];
        let dn = data[i]['Displayname'];
        let id = data[i]['id'];
        // li.innerText ="<a href=`visit.php?DN=dn'>dn</a>`
        li.innerHTML = "<a href=visit.php?ID=" + id + ">" + dn + "</a>";

        dataViewer.appendChild(li);
    }
}