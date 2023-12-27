let currencyFrom = $('.currency-rate__from').text().toUpperCase();
let currencyTo = $('.currency-rate__to').text().toUpperCase();

$.ajax({
    url: `https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_LcjE7W7vrI3VkNSj8mDZM12QLiTtnCInRIJ5DYqF&base_currency=${currencyFrom}&currencies=${currencyTo}`,
    success: function(json) {
        $('.currency-rate__res').text(json.data[currencyTo]);
    }
});