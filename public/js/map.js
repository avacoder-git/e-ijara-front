ymaps.ready(init);
var regions





function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.66655, 66.3235],
        zoom: 6,
        controls: ['zoomControl', 'typeSelector', 'fullscreenControl']
    });


    // Creating a custom drop-down list layout.
    ListBoxLayout = ymaps.templateLayoutFactory.createClass(
        "<button id='my-listbox-header' class='btn btn-success dropdown-toggle' data-toggle='dropdown'>" +
        "{{data.title}} <span class='caret'></span>" +
        "</button>" +
        /**
         * This element will serve as a container for list items.
         * Depending on whether the list is expanded or collapsed, this container will be
         * hidden or shown together with its child elements.
         */
        "<ul id='my-listbox'" +
        " class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu'" +
        " style='display: {% if state.expanded %}block{% else %}none{% endif %};'></ul>", {

        build: function () {
            /**
             * Calling the build method of the parent class before
             * performing additional actions.
             */
            ListBoxLayout.superclass.build.call(this);

            this.childContainerElement = $('#my-listbox').get(0);
            /**
             * Generating a special event that notifies the control
             * of changes to the child element container.
             */
            this.events.fire('childcontainerchange', {
                newChildContainerElement: this.childContainerElement,
                oldChildContainerElement: null
            });
        },

        /**
         * Overriding the interface method that returns a reference
         * to the child element container.
         */
        getChildContainerElement: function () {
            return this.childContainerElement;
        },

        clear: function () {
            /**
             * Forcing the control to remove child elements from the parent
             * before cleaning the layout. 
             * This will protect us from unexpected errors associated
             * with the destruction of DOM elements in earlier versions of IE.
             */
            this.events.fire('childcontainerchange', {
                newChildContainerElement: null,
                oldChildContainerElement: this.childContainerElement
            });
            this.childContainerElement = null;
            /**
             * Calling the "clear" method of the parent class
             * after performing additional actions.
             */
            ListBoxLayout.superclass.clear.call(this);
        }
    }),

        // Also creating a layout for a separate list item.
        ListBoxItemLayout = ymaps.templateLayoutFactory.createClass(
            "<li class='dropdown-item'><a>{{data.content}}</a></li>"
        ),
        // Creating two items in a drop-down list
        listBoxItems = makeListBoxItems()
    // Now we'll create a list containing the two items.
    listBox = new ymaps.control.ListBox({
        items: listBoxItems,
        data: {
            title: 'Viloyatni tanlang'
        },
        options: {
            // You can use options to specify the layout directly for the list,
            layout: ListBoxLayout,
            /**
             * or the layout for the child elements of the list. To define options for child
             * elements through the parent element,
             * add the 'item' prefix to option names.
             */
            itemLayout: ListBoxItemLayout
        }
    });

    listBox.events.add('click', function (e) {
        /**
         * Getting a reference to the clicked object.
         * List item events propagate and can be 
         * listened to on the parent element.
         */
        var item = e.get('target');
        // A click on the drop-down list title does not need to be processed.
        if (item != listBox) {
            var id = item.data.get('id')
            myMap.setCenter(
                item.data.get('center'),
                item.data.get('zoom')
            );
                
        }





    });


    myMap.controls.add(listBox, { float: 'left' });




}



function makeListBoxItems() {
    data = getRegions()
    list = []
    for (let i = 0; i < data.length; i++) {
        list.push(
            new ymaps.control.ListBoxItem({
                data: {
                    content: data[i].nameuz,
                    center: [data[i].lat, data[i].long],
                    id: data[i].id,
                    zoom: 8
                }
            }))
    }
    return list;
}

// console.log(getOnlyGeoJSONFromRegion(6))
// function getOnlyGeoJSONFromRegion(id)
// {
//     return  JSON.parse(getRegion(id).data.geometry)

// }

function getRegions() {

    var result = false;
    $.ajax({
        url: 'http://ijarafront.odya/api/json/regions',
        dataType: "json",
        type: "get",
        async: false,
        data: {},
        success: function (data) {
            result = data;
        },
    });

    return result;
}


function getRegion(id) {

    var result = false;
    $.ajax({
        url: 'http://ijarafront.odya/api/json/regions/' + id,
        dataType: "json",
        type: "get",
        async: false,
        success: function (data) {
            result = data;
        },
    });

    return result;
}