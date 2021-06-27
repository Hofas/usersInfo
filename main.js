function search(name) {
    const userScope = document.querySelector('#userScope');
    let scope;
    if (name.length < 1) {
     clearSearch();
    } else {
        if (userScope.checked)
        {scope = 'user'}
        else {scope = 'dep'}
        }
    fetchSearchData(name,scope);
}

function fetchSearchData(name,scope) {

    fetch('search.php',{
        method:'POST',
        body: new URLSearchParams('name=' + name + '&scope=' +scope)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res,scope))
        .catch(e => console.error('Error:' + e))
    }



function viewSearchResult(data,scope) {
    clearSearch();
    if (scope === "user") {
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
} else {
        for (let i=0;i< data.length;i++){
            const li = document.createElement('li');
            let dep = data[i]['Department'];
            let depSearch = dep.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            depSearch = depSearch.replace(" ","+");
            li.innerHTML = `<a href='#' onclick=openDepVisit('${depSearch}') >` + dep + "</a>";
            dataViewer.appendChild(li);
        }


    }
}

function openNewWindow(id) {
    window.open(`visit.php?ID=${id}`,`Visit${id}`,'menubar=no,toolbar=no,resizable=no,height=600,width=600');
    // alert(id);
};

function openDepVisit(dep) {
    window.open(`visitDep.php?dep=${dep}`,`VisitDep${dep}`,'menubar=no,toolbar=no,resizable=no,height=600,width=1000');
    // alert(id);
};



function clearSearch(){

    const dataViewer = document.querySelector('#dataViewer');
    dataViewer.innerHTML = "";

}