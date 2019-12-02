let books = axios.get('api/books').then((json) => json.data)
    .then((books) => {
        let grid3Books = [];
        while(books.length) grid3Books.push(books.splice(0,3));
        let content = `<div class="container">`;
        for (let i = 0; i < grid3Books.length; i++) {
            content += `
        <div class="row">
        `
            for (let j = 0; j < grid3Books[i].length; j++) {
                console.log((j*Math.floor(books.length / 3)) + i)
                content += `
            <div class="col-4 card">
        <img class="card-img-top" style="height:300px; width:300px;" src="${grid3Books[i][j]['image_url']}" alt="Card image">
        <div class="card-body">
          <h3 class="card-title">${grid3Books[i][j]['title']}</h3>
          <h5 class="card-title">ISBN: ${grid3Books[i][j]['isbn']}</h5>
          <h5 class="card-title">Authors: ${grid3Books[i][j]['authors']}</h5>
          <p class="card-text">${trimString(grid3Books[i][j]['description'],50)}</p>
          <a href="#" class="btn btn-primary">See Details</a>
        </div>
        </div>
            `
            }
            content += `
        </div>
        `;
        }
        content += `
        </div>
        `;
        document.getElementById('content').innerHTML = content;
    });
function trimString(str,limitLength){
    if(str && str.length>limitLength){
        return str.substring(0,limitLength)+'...';
    }
    return str;
}