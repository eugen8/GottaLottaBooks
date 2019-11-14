let books = axios.get('data/books.json').then((json) => json.data.books)
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
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
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
