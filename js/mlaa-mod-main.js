const tags = document.querySelectorAll('.tag-cloud-link')
console.log(tags)
const url = window.location.href
console.log(url)
const urlArray = url.split("/")
const length = urlArray.length
console.log(urlArray[length-2])

tags.forEach((tag) => {
  let tagUrl = tag.href;
  console.log(tagUrl)
  tag.href = tagUrl+'?portfolio_category=all-community-opportunities'
});
//https://mlaa.middcreate.net/portfolio_tags/environmental-studies/?portfolio_category=all-community-opportunities