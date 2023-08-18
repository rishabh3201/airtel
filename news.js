const newsContainer = document.getElementById('news-container');

const newsData = [
  {
    title: 'Breaking News 1',
    pic: 'airtel.png',
    date: '2023-07-27',
    content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  },
  {
    title: 'Breaking News 2',
    date: '2023-07-26',
    content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  },

];

function displayNews() {
  let newsHTML = '';

  for (const newsItem of newsData) {
    newsHTML += `
      <div class="news-item">
        <h2>${newsItem.title}</h2>
        <img src="${newsItem.pic}">
        <p>Date: ${newsItem.date}</p>
        <p>${newsItem.content}</p>
      </div>
    `;
  }

  newsContainer.innerHTML = newsHTML;
}

displayNews();
