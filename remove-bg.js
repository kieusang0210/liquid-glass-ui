const sharp = require('sharp');
const path = require('path');

const INPUT = path.join(__dirname, 'image.png');
const OUTPUT = path.join(__dirname, 'logo.png');

async function removeBg() {
    const { data, info } = await sharp(INPUT)
        .ensureAlpha()
        .raw()
        .toBuffer({ resolveWithObject: true });

    const { width, height, channels } = info;
    const threshold = 220;

    for (let i = 0; i < data.length; i += channels) {
        const r = data[i];
        const g = data[i + 1];
        const b = data[i + 2];
        if (r > threshold && g > threshold && b > threshold) {
            data[i + 3] = 0;
        }
    }

    await sharp(data, { raw: { width, height, channels } })
        .png()
        .toFile(OUTPUT);

    console.log(`Done! logo.png saved (${width}x${height})`);
}

removeBg().catch(e => { console.error('Error:', e.message); process.exit(1); });
