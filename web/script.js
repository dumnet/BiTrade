function createInstance() {
          var req = null;
          if (window.XMLHttpRequest) {
            req = new XMLHttpRequest();
          } else if (window.ActiveXObject) {
            try {
              req = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
              try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
              } catch (e) {
                alert("XHR not created");
              }
            }
          }
          return req;
        };

        function storing(data, element) {
          element.innerHTML = data;
        }

        function refresh_Account(element) {
          var req = createInstance();

          req.onreadystatechange = function() {
            if (req.readyState == 4) {
              if (req.status == 200) {
                storing(req.responseText, element);
              } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
              }
            }
          };
          setInterval(function() {
            req.open("GET", "refresh_dashboard.php", true);
            req.send(null);
          }, 5000);
        }
         function refresh_Order(element) {
          var req = createInstance();

          req.onreadystatechange = function() {
            if (req.readyState == 4) {
              if (req.status == 200) {
                storing(req.responseText, element);
              } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
              }
            }
          };
          setInterval(function() {
            req.open("GET", "refresh_order.php", true);
            req.send(null);
          }, 5000);
        }
         function refresh_Flux(element) {
          var req = createInstance();

          req.onreadystatechange = function() {
            if (req.readyState == 4) {
              if (req.status == 200) {
                storing(req.responseText, element);
              } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
              }
            }
          };
          setInterval(function() {
            req.open("GET", "refresh_flux.php", true);
            req.send(null);
          }, 5000);
        }
         function refresh_dataFlux(element) {
          var req = createInstance();

          req.onreadystatechange = function() {
            if (req.readyState == 4) {
              if (req.status == 200) {
                storing(req.responseText, element);
              } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
              }
            }
          };
          setInterval(function() {
            req.open("GET", "dataFlux.php", true);
            req.send(null);
          }, 5000);
        }
