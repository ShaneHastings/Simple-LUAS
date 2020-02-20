![Simple LUAS Banner](https://shanehastings.eu/luas/simpleluas_banner_github.png)
Simple, clean and fast. Real time passenger information for Dublin's LUAS tram system.
# Simple LUAS

This project uses the RTPI API supplied by Transport for Ireland for the Luas. Obviously there are a ton of real time apps out there for iOS and Android, as well as the official [Luas website](http://luas.ie/) - but my aim with this is to make a clean experience whilst also improving my dev skills.

### API

The RTPI API is available here: <http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=STS&encrypt=false>. You can find a list of the three character stop codes [here ( to be added )](https://shanehastings.eu/luas/faq.php).

The response is XML in the format:

    <stopInfo created="2020-02-20T22:55:57" stop="St. Stephen's Green" stopAbv="STS">
        <message>Green Line services operating normally</message>
        <direction name="Inbound">
            <tram dueMins="12" destination="Broombridge" />
        </direction>
        <direction name="Outbound">
          <tram dueMins="15" destination="Bride's Glen" />
        </direction>
    </stopInfo>

### Feature List

- [x] Mobile and browser icons
- [x] Bulma CSS (WIP)
- [ ] Favourite stops
- [ ] Line indicator (Green/Red)
- [x] List in progress... 

### Demo

Check out the live version of the project **[here](https://shanehastings.eu/luas/)**.
