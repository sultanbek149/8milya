const fs = require('fs');
const axios = require('axios');

async function downloadImage(url, filepath) {
  const response = await axios({
    url,
    method: 'GET',
    responseType: 'stream',
  });
  return new Promise((resolve, reject) => {
    response.data
      .pipe(fs.createWriteStream(filepath))
      .on('error', reject)
      .once('close', () => resolve(filepath));
  });
}

/* ============================================================
  Download Images in Order
============================================================ */

async function test() {
  let example_image_1 = await downloadImage(
    'https://8milya.kz/img/about.png',
    './example-1.png',
  );

  console.log(example_image_1); // true
  console.log(example_image_1); // ''
}

// test()

const parser = async () => {
  const items = [];
  fs.readFile('./dataset_instagram-scraper_2022-12-17_12-26-09-524.json', (err, data) => {
    items.push(...JSON.parse(data));
    const newItems = items.map((item) => {
      const { id, caption, url, displayUrl, images } = item;
      return {
        id,
        caption,
        url,
        mainImg: displayUrl,
        images,
      };
    });

    console.log(newItems);

    fs.writeFile('cars-data.json', JSON.stringify(newItems), (err) => {
      console.log(err);
    });
  });
};

//parser();

const downloadImages = async () => {
  const items = [];
  fs.readFile('./cars-data.json', async (err, data) => {
    items.push(...JSON.parse(data));
    let index = 0;
    for (const item of items) {
      const path = `${index}-${item.id}`;
      const dir = `./cars/${path}`;
      if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir);
      }
      const mainImage = await downloadImage(item.mainImg, `${dir}/main.jpg`);
      items[index].mainImg = `${path}/main.jpg`;
      let indexImg = 0;
      for (const img of item.images) {
        const imageCar = await downloadImage(img, `${dir}/${indexImg}.jpg`);
        items[index].images[indexImg] = `${path}/${indexImg}.jpg`;
        indexImg += 1;
      }
      index += 1;
    }

    fs.writeFile('upd.json', JSON.stringify(items), (err) => {
      console.log(err);
    });
  });
};

downloadImages();
