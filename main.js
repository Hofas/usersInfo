function search(name) {
    // console.log(name);
    const dataViewer = document.querySelector('#dataViewer');
    if (name.length < 1) {
        dataViewer.innerHTML = "";
    } else {
        fetchSearchData(name);
        }
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
        let urlV = "visit.php?ID=" + id;

        // li.innerHTML = "<a href=visit.php?ID=" + id + " target='_blank' >" + dn + "</a>";
        li.innerHTML = `<a href='#' onclick=openNewWindow(${id}) >` + dn + "</a>";
        dataViewer.appendChild(li);
    }
}

function openNewWindow(id) {
    window.open(`visit.php?ID=${id}`,`Visit${id}`,'menubar=no,toolbar=no,resizable=no,height=600,width=600');
    // alert(id);
};
