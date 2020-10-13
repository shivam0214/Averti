<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Plaid Quickstart Example</title>
<link rel="stylesheet" href="https://threads.plaid.com/threads.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/static/style.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <main class="main">
    <div class="grid">
      <div class="grid__column grid__column--is-twelve-columns">
        <div id="banner" class="everpresent-content">
          <h1 class="everpresent-content__heading">Plaid Quickstart</h1>
          <p id="intro" class="everpresent-content__subheading">
            An example application that outlines an end-to-end integration with Plaid
          </p>
          <p id="steps" class="everpresent-content__subheading">
           Success! You just created an Item by linking your account.
          </p>
        </div>

        <div id="container" class="initial-view">
          <p class="initial-view__description">
            Click the button below to open a list of Institutions. After you select one, you’ll be guided through an authentication process. Upon completion, a public_token will be passed back to the server and exchanged for access_token.
          </p>

          <button id="link-btn" class="button button--is-primary" disabled>Connect with Plaid</button>
          <div class="loading-indicator"></div>

        </div>

        <div id="app" class="connected-view">
          <div class="item-overview">
            <div class="item-overview__column">
              <h3 class="item-overview__heading">item_id</h3>
              <p class="item-overview__id" id="item_id">san.asjsansakjsakjasjksajkas</p>
            </div>
            <div class="item-overview__column">
              <h3 class="item-overview__heading">access_token</h3>
              <p class="item-overview__id" id="access_token">••••••••hsakjsl</p>
            </div>
            <div style="clear: both"></div>
          </div>

          <p>Now that you have an access_token you can make all of the following API requests:</p>

          <div class="box">
            <h3 class="box__heading">Products</h3>

            <!-- Auth -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Auth</div>
                <div class="item-data-row__endpoint">/auth/get</div>
                <div class="item-data-row__description">Retrieve account and routing numbers for checking and savings accounts.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-auth-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-auth-data"></tbody></table>
              </div>
            </div>

            <!--Transactions -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Transactions</div>
                <div class="item-data-row__endpoint">/transactions/get</div>
                <div class="item-data-row__description">Retrieve transactions for credit and depository accounts.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-transactions-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-transactions-data"></tbody></table>
              </div>
            </div>

            <!-- Identity -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Identity</div>
                <div class="item-data-row__endpoint">/identity/get</div>
                <div class="item-data-row__description">Retrieve Identity information on file with the bank. Reduce fraud by comparing user-submitted data to validate identity.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-identity-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-identity-data"></tbody></table>
              </div>
            </div>

            <!-- Balance -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Balance</div>
                <div class="item-data-row__endpoint">/accounts/balance/get</div>
                <div class="item-data-row__description">Check balances in real time to prevent non-sufficient funds fees.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-balance-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-balance-data"></tbody></table>
              </div>
            </div>

            <!-- Assets (hidden unless 'assets' is included in the product list) -->
            <div id='assets' class="item-data-row" style='display:none;'>
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Assets</div>
                <div class="item-data-row__endpoint">/asset_report/*</div>
                <div class="item-data-row__description">Create a point-in-time snapshot of a user's assets.</div>
              </div>

              <div class="item-data-row__right">
                <button id="get-assets-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>

                <a id="download-assets-pdf-btn" class="button button--is-small button--is-primary button--is-full-width" style="display: none; margin: 10px 0px;";>Download as PDF</a>
              </div>

              <div class="item-data-row__response">
                <table><tbody id="get-assets-data"></tbody></table>
              </div>
            </div>

            <!-- Holdings -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Holdings</div>
                <div class="item-data-row__endpoint">/investments/holdings/get</div>
                <div class="item-data-row__description">Retrieve investment holdings on file with the bank, brokerage, or investment institution. Analyze over-exposure to market segments.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-holdings-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-holdings-data"></tbody></table>
              </div>
            </div>

            <!-- Investment Transactions -->
            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Investment Transactions</div>
                <div class="item-data-row__endpoint">/investments/transactions/get</div>
                <div class="item-data-row__description">Retrieve investment transactions to analyze cash flow and trading performance.</div>
              </div>
              <div class="item-data-row__right">
                <button id="get-investment-transactions-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>
              <div class="item-data-row__response">
                <table><tbody id="get-investment-transactions-data"></tbody></table>
              </div>
            </div>

            <!-- UK Payment Initiation (hidden unless 'payment_initiation' is included in the product list) -->
            <div class="payment_initiation item-data-row" style='display:none;'>
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__nicename">Payment Initiation</div>
                <div class="item-data-row__endpoint">/payment_initiation/payment/get</div>
                <div class="item-data-row__description">Retrieve payment initiation status for the payment you just initiated.</div>
              </div>

              <div class="item-data-row__right">
                <button id="get-payment-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>

              <div class="item-data-row__response">
                <table><tbody id="get-payment-data"></tbody></table>
              </div>
            </div>

          </div>

          <div class="box">
            <h3 class="box__heading">Item management</h3>

            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__endpoint">/item/get</div>
                <div class="item-data-row__description">Retrieve information about an Item, like the institution, billed products, available products, and webhook information.</div>
              </div>

              <div class="item-data-row__right">
                <button id="get-item-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>

              <div class="item-data-row__response">
                <table><tbody id="get-item-data"></tbody></table>
              </div>
            </div>

            <div class="item-data-row">
              <div class="item-data-row__left">
                <div class="item-data-row__request-type">post</div>
              </div>
              <div class="item-data-row__center">
                <div class="item-data-row__endpoint">/accounts/get</div>
                <div class="item-data-row__description">Retrieve high-level information about all accounts associated with an Item.</div>
              </div>

              <div class="item-data-row__right">
                <button id="get-accounts-btn" class="button button--is-small button--is-default button--is-full-width">Send request</button>
              </div>

              <div class="item-data-row__response">
                <table><tbody id="get-accounts-data"></tbody></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
  <script>
  function render_page($, page_info) {
    // Handles redirect from the oauth response page for the oauth flow.
    if (document.referrer != null && document.referrer.includes('http://localhost:8000/oauth-response.html') && page_info.item_id != null && page_info.item_id.length > 0) {
      $('#container').fadeOut('fast', function() {
        $('#item_id').text(page_info.item_id);
        $('#access_token').text(page_info.access_token);
        $('#intro').hide();
        $('#app, #steps').fadeIn('slow');
      });
    }

    var products = page_info.products;
    if (products.includes('assets')) {
      $('#assets').show();
    }
    // This functionality is only relevant for the UK Payment Initiation product.
    if (products.includes('payment_initiation')) {
      $('.payment_initiation').show();
      $.post('/api/create_link_token_for_payment', {}, function(data) {
        if (data.error != null) {
            $('.loading-indicator').hide();
            displayError($('#container'), data.error);
            return;
        }
        localStorage.setItem('link_token', data.link_token);
        // In the case of payment_initiation product, we need to wait for a
        // link token configured with payment initiation to be generated before
        // the Link handler can be initialized.
        handler = Plaid.create({
          token: data.link_token,
          onSuccess: function(public_token) {
            // This public token exchange step is not relevant for the
            // payment_initiation product and should be skipped.
            $.post('/api/set_access_token', {
              public_token: public_token
            }, function(data) {
              $('#container').fadeOut('fast', function() {
                $('#item_id').text(data.item_id);
                $('#access_token').text(data.access_token);
                $('#intro').hide();
                $('#app, #steps').fadeIn('slow');
              });
            });
          },
        });
        $('#link-btn').attr('disabled', false);
        $('.loading-indicator').hide();
      });
    } else {
      var handler = null;
      $.post('/api/create_link_token', {}, function(data){
        if (data.error != null) {
            $('.loading-indicator').hide();
            displayError($('#container'), data.error);
            return;
        }
        localStorage.setItem('link_token', data.link_token);
        handler = Plaid.create({
          token: data.link_token,
          onSuccess: function(public_token) {
            $.post('/api/set_access_token', {
              public_token: public_token
            }, function(data) {
              $('#container').fadeOut('fast', function() {
                $('#item_id').text(data.item_id);
                $('#access_token').text(data.access_token);
                $('#intro').hide();
                $('#app, #steps').fadeIn('slow');
              });
            });
          },
        });
        $('#link-btn').attr('disabled', false);
        $('.loading-indicator').hide();
      });
    }

    var accessToken = qs('access_token');
    if (accessToken != null && accessToken !== '') {
      $.post('/api/set_access_token', {
        access_token: accessToken
      }, function(data) {
        $('#container').fadeOut('fast', function() {
          $('#item_id').text(data.item_id);
          $('#access_token').text(accessToken);
          $('#intro').hide();
          $('#app, #steps').fadeIn('slow');
        });
      });
    }

    $('#link-btn').on('click', function(e) {
      if (handler != null) {
        handler.open();
      }
    });

    $('#get-accounts-btn').on('click', function(e) {
      $.get('/api/accounts', function(data) {

        $('#get-accounts-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var html = '<tr><td><strong>Name</strong></td><td><strong>Balances</strong></td><td><strong>Subtype</strong></td><td><strong>Mask</strong></td></tr>';
          data.accounts.forEach(function(account, idx) {
            html += '<tr>';
            html += '<td>' + account.name + '</td>';
            html += '<td>$' + (account.balances.available != null ? account.balances.available : account.balances.current) + '</td>';
            html += '<td>' + account.subtype + '</td>';
            html += '<td>' + account.mask + '</td>';
            html += '</tr>';
          });

          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-auth-btn').on('click', function(e) {
      $.get('/api/auth', function(data) {
        $('#get-auth-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var isAch = data.numbers.ach.length > 0;
          var routingLabel = isAch ? 'Routing #' : 'Institution and Branch #';

          var html = '<tr><td><strong>Name</strong></td><td><strong>Balance</strong></td><td><strong>Account #</strong></td><td><strong>'+ routingLabel +'</strong></td></tr>';
          if (isAch) {
            data.numbers.ach.forEach(function(achNumbers, idx) {
              // Find the account associated with this set of account and routing numbers
              var account = data.accounts.filter(function(a) {
                return a.account_id === achNumbers.account_id;
              })[0];
              html += '<tr>';
              html += '<td>' + account.name + '</td>';
              html += '<td>$' + (account.balances.available != null ? account.balances.available : account.balances.current) + '</td>';
              html += '<td>' + achNumbers.account + '</td>';
              html += '<td>' + achNumbers.routing + '</td>';
              html += '</tr>';
            });
          } else {
            data.numbers.eft.forEach(function(eftNumber, idx) {
              // Find the account associated with this set of account and routing numbers
              var account = data.accounts.filter(function(a) {
                return a.account_id === eftNumber.account_id;
              })[0];
              html += '<tr>';
              html += '<td>' + account.name + '</td>';
              html += '<td>$' + (account.balances.available != null ? account.balances.available : account.balances.current) + '</td>';
              html += '<td>' + eftNumber.account + '</td>';
              html += '<td>' + eftNumber.institution + ' ' + eftNumber.branch + '</td>';
              html += '</tr>';
            });
          }
          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-identity-btn').on('click', function(e) {
      $.get('/api/identity', function(data) {
        $('#get-identity-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var html = '<tr class="response-row response-row--is-identity"><td><strong>Names</strong></td><td><strong>Emails</strong></td><td><strong>Phone numbers</strong></td><td><strong>Addresses</strong></td></tr><tr class="response-row response-row--is-identity">';
          var identityData = data.identity[0];
          var html = '<tr class="response-row response-row--is-identity"><td><strong>Names</strong></td><td><strong>Emails</strong></td><td><strong>Phone numbers</strong></td><td><strong>Addresses</strong></td></tr><tr class="response-row response-row--is-identity">';

          identityData.owners.forEach(function(owner, idx) {
            html += '<td>';
            owner.names.forEach(function(name, idx) {
              html += name + '<br />';
            });
            html += '</td><td>';
            owner.emails.forEach(function(email, idx) {
              html += email.data + '<br />';
            });
            html += '</td><td>';
            owner.phone_numbers.forEach(function(number, idx) {
              html += number.data + '<br />';
            });
            html += '</td><td>';
            owner.addresses.forEach(function(address, idx) {
              html += address.data.street + '<br />';
              html += address.data.city + ', ' + address.data.region + ' ' + address.data.postal_code + '<br />';
            });
            html += '</td>';
            html += '</tr>';

          });

          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-item-btn').on('click', function(e) {
      $.get('/api/item', function(data) {
        $('#get-item-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var html = '';
          html += '<tr><td>Institution name</td><td>' + data.institution.name + '</td></tr>';
          html += '<tr><td>Billed products</td><td>' + data.item.billed_products.join(', ') + '</td></tr>';
          html += '<tr><td>Available products</td><td>' + data.item.available_products.join(', ') + '</td></tr>';

          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-transactions-btn').on('click', function(e) {
      $.get('/api/transactions', function(data) {
        if (data.error != null && data.error.error_code != null) {
          // Format the error
          var errorHtml = '<div class="inner"><p>' +
           '<strong>' + data.error.error_code + ':</strong> ' +
           (data.error.display_message == null ? data.error.error_message : data.error.display_message)  + '</p></div>';

          if (data.error.error_code === 'PRODUCT_NOT_READY') {
            // Add additional context for `PRODUCT_NOT_READY` errors
            errorHtml += '<div class="inner"><p>Note: The PRODUCT_NOT_READY ' +
             'error is returned when a request to retrieve Transaction data ' +
             'is made before Plaid finishes the <a href="https://plaid.com/' +
             'docs/quickstart/#transaction-data-with-webhooks">initial ' +
             'transaction pull.</a></p></div>';
          }
          // Render the error
          $('#get-transactions-data').slideUp(function() {
            $(this).slideUp(function() {
              $(this).html(errorHtml).slideDown();
            });
          });
          return;
        }
        $('#get-transactions-data').slideUp(function () {
          var html = '<tr><td><strong>Name</strong></td><td><strong>Amount</strong></td><td><strong>Date</strong></td></tr>';
          data.transactions.forEach(function (txn, idx) {
            html += '<tr>';
            html += '<td>' + txn.name + '</td>';
            html += '<td>$' + txn.amount + '</td>';
            html += '<td>' + txn.date + '</td>';
            html += '</tr>';
          });

          $(this).slideUp(function () {
            $(this).html(html).slideDown();
          });
        });
      });
    });

    $('#get-balance-btn').on('click', function(e) {
      $.get('/api/balance', function(data) {
        $('#get-balance-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var html = '<tr><td><strong>Name</strong></td><td><strong>Balance</strong></td><td><strong>Subtype</strong></td><td><strong>Mask</strong></td></tr>';
          data.accounts.forEach(function(account, idx) {
            html += '<tr>';
            html += '<td>' + account.name + '</td>';
            html += '<td>$' + (account.balances.available != null ? account.balances.available : account.balances.current) + '</td>'
            html += '<td>' + account.subtype + '</td>';
            html += '<td>' + account.mask + '</td>';
            html += '</tr>';
          });

          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-holdings-btn').on('click', function(e) {
      $.get('/api/holdings', function(data) {
        $('#get-holdings-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          // Organize by Account
          var holdingsData = data.holdings.holdings.sort(function(a, b) {
            if (a.account_id > b.account_id) return 1;
            return -1;
          });
          var html = '<tr class="response-row response-row--is-holdings"></tr><td><strong>Account Mask</strong></td><td><strong>Name</strong></td><td><strong>Quantity</strong></td><td><strong>Close Price</strong></td><td><strong>Value</strong></td><tr class="response-row response-row--is-holding">';
          holdingsData.forEach(function(h, idx) {
            const account = data.holdings.accounts.filter(a => a.account_id === h.account_id)[0];
            const security = data.holdings.securities.filter(s => s.security_id === h.security_id)[0];
            if (account == null) {
              displayError(this, {
                code: 500,
                type: 'Internal',
                display_message: 'Holding lacks a account',
              });
            }
            if (security == null) {
              displayError(this, {
                code: 500,
                type: 'Internal',
                display_message: 'Holding lacks a security',
              });
            }
            html += '<tr>';
            html += '<td>' + account.mask + '</td>';
            html += '<td>' + security.name + '</td>';
            html += '<td>' + h.quantity + '</td>';
            html += '<td>$' + security.close_price + '</td>';
            html += '<td>$' + h.quantity * security.close_price + '</td>';
            html += '</tr>';
          });
          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-investment-transactions-btn').on('click', function(e) {
      $.get('/api/investment_transactions', function(data) {
        $('#get-investment-transactions-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          investmentTransactionData = data.investment_transactions.investment_transactions;
          var html = '<tr class="response-row response-row--is-investment-transactions"></tr><td><strong>Name</strong></td><td><strong>Amount</strong></td><td><strong>Date</strong></td><tr class="response-row response-row--is-investment-transaction">';
          investmentTransactionData.forEach(function(invTxn, idx) {
            html += '<tr>';
            html += '<td>' + invTxn.name + '</td>';
            html += '<td>$' + invTxn.amount + '</td>';
            html += '<td>' + invTxn.date + '</td>';
            html += '</tr>';
          });
          $(this).html(html).slideDown();
        });
      });
    });

    $('#get-assets-btn').on('click', function(e) {
      $.get('/api/assets', function(data) {
        $('#get-assets-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var reportData = data.json;
          var html = `
          <tr>
            <td><strong>Account</strong></td>
            <td><strong>Balance</strong></td>
            <td><strong># Transactions</strong></td>
            <td><strong># Days Available</strong></td>
          </tr>`;
          reportData.items.forEach(function(item, itemIdx) {
            item.accounts.forEach(function(account, accountIdx) {
              html += '<tr>';
              html += '<td>' + account.name + '</td>';
              html += '<td>$' + account.balances.current + '</td>'
              html += '<td>' + account.transactions.length + '</td>';
              html += '<td>' + account.days_available + '</td>';
              html += '</tr>';
            });
          });

          $('#download-assets-pdf-btn')
            .attr('href', `data:application/pdf;base64,${data.pdf}`)
            .attr('download', 'Asset Report.pdf')
            .show();

          $(this).html(html).slideDown();
        });
      });
    });

    // This functionality is only relevant for the UK Payment Initiation product.
    $('#get-payment-btn').on('click', function(e) {
      $.get('/api/payment', function(data) {
        $('#get-payment-data').slideUp(function() {
          if (data.error != null) {
            displayError(this, data.error);
            return;
          }
          var paymentData = data.payment;
          var html = '';
          html += '<tr><td>Payment ID</td><td>' + paymentData.payment_id + '</td></tr>';
          html += '<tr><td>Amount</td><td>' + (paymentData.amount.currency + ' ' + paymentData.amount.value) + '</td></tr>';
          html += '<tr><td>Status</td><td>' + paymentData.status + '</td></tr>';
          html += '<tr><td>Last Status Update</td><td>' + paymentData.last_status_update + '</td></tr>';
          html += '<tr><td>Recipient ID</td><td>' + paymentData.recipient_id + '</td></tr>';
          $(this).html(html).slideDown();
        });
      });
    });
  }
  $.post('/api/info', {}, function(result) {
    render_page(jQuery, result);
  });

function qs(key) {
    key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
    var match = location.search.match(new RegExp("[?&]"+key+"=([^&]+)(&|$)"));
    return match && decodeURIComponent(match[1].replace(/\+/g, " "));
}

function displayError(element, error) {
  var html = `
    <div class="alert alert-danger">
      <p><strong>Error Code:</strong> ${error.error_code}</p>
      <p><strong>Error Type:</strong> ${error.error_type}</p>
      <p><strong>Error Message:</strong> ${error.display_message == null ? error.error_message : error.display_message}</p>
      <div>Check out our <a href="https://plaid.com/docs/#errors-overview">errors documentation</a> for more information.</div>
    </div>`;
  $(element).html(html).slideDown();
}
  </script>
</body>
</html>
