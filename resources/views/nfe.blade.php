<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            /* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}} */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
        <div style="position: absolute;">
            <img class="is-hidden-touch lazyloaded" src="https://www.jettax.com.br/wp-content/themes/jettax/img/padroes/logo_topo.png" alt="Jettax" data-ll-status="loaded" width="279" height="95">
        </div>
        <div style="color:blue;background-color: #d2d6d5;">
            <h1><br><center>Teste - Washington Monteiro / 08-2021</center></h1><br><br><hr>
        </div>
    </head>
    <body class="antialiased">
    <div class="container">

    <form class="bd-example">
        <fieldset>
            <legend>Listar NFE do Cliente</legend>
            <div class="row mb-3">
                <label for="inputCliente" class="col-sm-2 col-form-label">Cliente</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCliente" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCodigo" class="col-sm-2 col-form-label">Código Cliente</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCodigo" value="1" disabled>
                </div>
            </div>
        </fieldset>
        </form>

        
        <br><br>
          
        <!-- component template -->
        <script type="text/x-template" id="grid-template">  
            <table class="table">
            <thead class="table-light">
                <tr>
                <th scope="col" v-for="key in columns"
                    @click="sortBy(key)"
                    :class="{ active: sortKey == key }">
                    @{{ key | capitalize }}
                    <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
                    </span>
                </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="entry in filteredNFE">
                    <!-- <th scope="row">1</th> -->
                    <td v-for="key in columns"  @click="clicked (entry)">@{{entry[key]}}</td>
                    <td><a href="#" @click="clickedModal(entry)"><img src="<?=url('')?>/img/view-details.png" alt="Produtos"></a></td>
                </tr>
            </tbody>
            </table>    
        </script>     

        <!-- demo root element -->
        <div id="demo">
            <form class="bd-example" id="search">
                <fieldset style="float: right;">
                    <div class="row mb-3">
                        <label for="inputSearch" class="col-sm-2 col-form-label"><strong>Search:</strong></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSearch" name="query" v-model="searchQuery">
                        </div>
                    </div>
                </fieldset>
            </form>
            <demo-grid
                :notas="gridData"
                :columns="gridColumns"
                :filter-key="searchQuery"
            >
            </demo-grid>
        </div>

        <form class="bd-example" id="totais">
        <fieldset>
            <legend>Totais NFE:</legend>
            <div class="row mb-3">
                <label for="inputTCliente" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTCliente" disabled>
                </div>
            </div>
            </fieldset>
        </form>

        </div>
    </body>
</html>
<!-- $totaisNFE -->
<script>
    // register the grid component
    Vue.component("demo-grid", {
        template: "#grid-template",
        props: {
            notas: Array,
            columns: Array,
            filterKey: String
        },
        data: function() {
            var sortOrders = {};
            this.columns.forEach(function(key) {
                sortOrders[key] = 1;
        });
        return {
            sortKey: "",
            sortOrders: sortOrders
        };
        },
        computed: {
        filteredNFE: function() {
            var sortKey = this.sortKey;
            var filterKey = this.filterKey && this.filterKey.toLowerCase();
            var order = this.sortOrders[sortKey] || 1;
            var notas = this.notas;
            if (filterKey) {
            notas = notas.filter(function(row) {
                return Object.keys(row).some(function(key) {
                return (
                    String(row[key])
                    .toLowerCase()
                    .indexOf(filterKey) > -1
                );
                });
            });
            }
            if (sortKey) {
            notas = notas.slice().sort(function(a, b) {
                a = a[sortKey];
                b = b[sortKey];
                return (a === b ? 0 : a > b ? 1 : -1) * order;
            });
            }
            return notas;
        }
        },
        filters: {
        capitalize: function(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }
        },
        methods: {
        sortBy: function(key) {
            this.sortKey = key;
            this.sortOrders[key] = this.sortOrders[key] * -1;
        },
        clickedModal(row) {
            openModal(row);
        },
        clicked(row) {
            $('#inputCliente').val(row.NOME+' - '+row.CNPJ);
            // console.log (row.CNPJ);
            // alert(row.CNPJ);
            return (row.CNPJ);
        }
        }
    });

    var header = <?=$dataHeader?>; 
    // bootstrap the demo
    var demo = new Vue({
        el: "#demo",
        data: {
            searchQuery: "",
            gridColumns: header.dataHeader,
            gridData: <?=$data?>        
        }
    });

    $("tr").click(function(){
        $(this).addClass("selected").siblings().removeClass("selected");
    });

    var totalCliente = <?=$totaisNFE?>;
    $("#inputTCliente").val(totalCliente[0].total_notas);
        

    function openModal(row){
        // console.log(row.ID);
        var produtos = "";
        $('#inputCliente').val(row.NOME+' - '+row.CNPJ);
        $.post("<?=url('')?>"+"/listar-nfe-produto",{"_token": "{{ csrf_token() }}",numero_nfe:row.CODIGO}, function(data, status){
            produtos = JSON.stringify(data.dataProdutos);
            produtos = JSON.parse(produtos); 
            
            var tabela = "";
            tabela += '<table class="table">';
            tabela += '<thead>';
            tabela += '    <tr>';
            tabela += '    <th scope="col">ID</th>';
            tabela += '    <th scope="col">CODIGO</th>';
            tabela += '    <th scope="col">NOME</th>';
            tabela += '    <th scope="col">NCM</th>';
            tabela += '    <th scope="col">CFOP</th>';
            tabela += '    <th scope="col">VALOR</th>';
            tabela += '    </tr>';
            tabela += '</thead>';
            tabela += '<tbody>';            
            for(var i = 0; i < produtos.length; i++) {
                var obj = produtos[i];
                tabela += '<tr>';
                tabela += '    <th scope="row">'+obj.id+'</th>';
                tabela += '    <td>'+obj.codigo+'</td>';
                tabela += '    <td>'+obj.nome+'</td>';
                tabela += '    <td>'+obj.ncm+'</td>';
                tabela += '    <td>'+obj.cfop+'</td>';
                tabela += '    <td>'+obj.valor+'</td>';
                tabela += '</tr>';
                // console.log(obj.id);
            }
            tabela += '</tbody>';
            tabela += '</table>';

            $('#content').html(tabela);

        });

        $('#produtosModal').modal('show');
    }

</script>

 <!-- Modal -->
<div class="modal fade" id="produtosModal" tabindex="-1" aria-labelledby="produtosModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="produtosModalLabel">Produtos:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<style>
    .bd-example {
        padding: 1.5rem;
        margin-right: 0;
        margin-left: 0;
        border-width: 1px;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    th.active {
        color: #fff;
    }

    th.active .arrow {
        opacity: 1;
    }

    .arrow.asc {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-bottom: 4px solid #fff;
    }

    .arrow.dsc {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid #fff;
    }

    tr:hover, tr.selected {
        background-color: #FFCF8B
    }
    td {padding: 5px;}

</style>