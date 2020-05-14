

window.onload = function() {
    var filters = document.getElementById("filtersForm");

    document.getElementById("FiltersSubmit").addEventListener("click", function () {
        filters.click();
    });

    var assosiations = {"Women":1,"Men":2,"Kids":3,"Soccer":4,"Basketball":5,"Running":6,"Lifestyle":7}
    var genderFilter = document.getElementById("genderFilter")
    var sportsFilter = document.getElementById("sportsFilter")
    var priceFilter = document.getElementById("priceFilter")

    this.console.log(document.querySelectorAll("#gender .filter"))
    document.querySelectorAll("#gender .filter").forEach(function(e) {
        e.addEventListener("click",function(){
            genderFilter.value = (assosiations[this.innerText]);
            document.getElementById("FiltersSubmit").click()
        })
    })
    document.querySelectorAll("#sports .filter").forEach(function(e) {
        e.addEventListener("click",function(){
            genderFilter.value = (assosiations[this.innerText]);
            document.getElementById("FiltersSubmit").click()
        })
    })
    // document.querySelectorAll("#price .filter").forEach(function(e) {
    //     e.addEventListener("click",function(){
    //         if (this.style.color == "red") {
    //             this.style.color = "black";
    //             var cut = this.innerText + ",";
    //             priceFilter.value = priceFilter.value.replace(cut,"")
    //         } else {
    //             this.style.color = "red";
    //             priceFilter.value += (this.innerText + ",");
    //         }
    //     })
    // })
}