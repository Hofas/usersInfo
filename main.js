function search(name) {
    const userScope = document.querySelector('#userScope');
    const marketScope = document.querySelector('#market');
    let market;
    let scope;
    if (name.length < 1) {
     clearSearch();
    } else {
        if (userScope.checked)
        {scope = 'user'}
        else {scope = 'dep'}
        }
    market = marketScope.value;
    console.log(market);
    fetchSearchData(name,scope,market);
}

function fetchSearchData(name,scope,market) {

    fetch('search.php',{
        method:'POST',
        body: new URLSearchParams('name=' + name + '&scope=' +scope + '&market=' + market)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res,scope,market))
        .catch(e => console.error('Error:' + e))
    }



function viewSearchResult(data,scope,market) {
    clearSearch();
    const dataViewer = document.querySelector('#dataViewer');
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
            li.innerHTML = `<a href='#' onclick=openDepVisit('${depSearch}','${market}') >` + dep + "</a>";
            dataViewer.appendChild(li);
        }


    }
}

function openNewWindow(id) {
    window.open(`visit.php?ID=${id}`,`Visit${id}`,'menubar=no,toolbar=no,resizable=no,height=600,width=600');
    // alert(id);
};

function openDepVisit(dep, market) { // tutaj należy dopisać do URL Market a visitDEP.php dodać parametr i w connect searchUserByDep($dep) dodac market
    window.open(`visitDep.php?dep=${dep}&market=${market}`,`VisitDep${dep}`,'menubar=no,toolbar=no,resizable=no,height=600,width=1000');
    // alert(id);
};



function clearSearch(){

    const dataViewer = document.querySelector('#dataViewer');
    dataViewer.innerHTML = "";

}