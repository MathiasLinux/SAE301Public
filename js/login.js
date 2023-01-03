let w = window.innerWidth;

if (w > 1440) {
    let video = document.querySelector('video');
    let source = document.createElement('source');

    source.setAttribute('src', 'video/chateau_1080p_Medium.mp4');
    source.setAttribute('type', 'video/mp4');

    video.appendChild(source);
    video.play();
}