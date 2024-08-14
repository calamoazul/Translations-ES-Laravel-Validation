<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando el campo :other es :value',
    'active_url' => 'El campo :attribute debe ser una url válida',
    'after' => 'El campo :attribute debe ser posterior a :date',
    'after_or_equal' => 'El campo :attribute debe ser igual o posterior a :date',
    'alpha' => 'El campo :attribute solo debe contener caracteres alfabéticos',
    'alpha_dash' => 'El campo :attribute  solo puede contener letras, números guiones y rayas bajas',
    'alpha_num' => 'El campo :attribute solo puede contener caracteres alfanuméricos',
    'array' => 'El campo :attribute debe ser un array',
    'ascii' => 'El campo :attribute  solo puede contener caracteres del código ASCII',
    'before' => 'El campo :attribute debe ser anterior a :date',
    'before_or_equal' => 'El campo :attribute debe ser anterior o igual a :date',
    'between' => [
        'array' => 'El campo :attribute debe tener una longitud de :min a :max items',
        'file' => 'El campo :attribute debe pesar entre :min y :max kilobytes',
        'numeric' => 'El campo :attribute debe ser un valor comprendido entre :min y :max',
        'string' => 'El campo :attribute debe tener una longitud de :min and :max caracteres',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso',
    'can' => 'El campo :attribute contiene un valor no permitido',
    'confirmed' => 'El campo :attribute no concuerda',
    'contains' => 'El campo :attribute debe contener un valor obligatorio',
    'current_password' => 'La contraseña es incorrecta',
    'date' => 'El campo :attribute debe ser una fecha con formato correcto',
    'date_equals' => 'El campo :attribute debe ser una fecha igual :date',
    'date_format' => 'El campo :attribute debe coincidir con el siguiente formato de fecha: :format',
    'decimal' => 'El campo :attribute debe contener al menos :decimal decimales',
    'declined' => 'El campo :attribute debe ser rechazado',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other tenga el valor :value',
    'different' => 'El campo :attribute y :other deben ser diferentes',
    'digits' => 'El campo :attribute debe contener :digits dígitos',
    'digits_between' => 'El campo :attribute debe tener entre :min y :max dígitos',
    'dimensions' => 'El campo :attribute posee unas dimensiones de imagen incorrectas',
    'distinct' => 'El campo :attribute tiene un valor duplicado en la base de datos',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con ninguno de los siguientes valores: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con ninguno de los siguientes valores: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo válida',
    'ends_with' => 'El campo :attribute debe terminar con alguno de los siguientes valores: :values.',
    'enum' => 'El campo :attribute seleccionado es incorrecto',
    'exists' => 'El campo :attribute no es correcto',
    'extensions' => 'El campo :attribute debe poseer alguna de las siguientes extensiones: :values.',
    'file' => 'El campo :attribute debe ser un archivo',
    'filled' => 'El campo :attribute no puede estar vacío',
    'gt' => [
        'array' => 'El campo :attribute debe poseer más de :value items',
        'file' => 'El campo :attribute  debe pesar más de :value kilobytes',
        'numeric' => 'El campo :attribute debe ser mayor a :value',
        'string' => 'El campo :attribute debe tener más de :value caracteres',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value items o más',
        'file' => 'El campo :attribute debe tener un peso igual o mayor a :value kilobytes',
        'numeric' => 'El campo :attribute debe ser igual o mayor a :value',
        'string' => 'El campo :attribute debe tener al menos :value caracteres',
    ],
    'hex_color' => 'El campo :attribute debe ser un color con código hexadecimal',
    'image' => 'El campo :attribute debe ser una imagen',
    'in' => 'El campo :attribute no es válido',
    'in_array' => 'El campo :attribute debe encontrarse también en el siguiente campo: :other',
    'integer' => 'El campo :attribute debe ser un número entero',
    'ip' => 'El campo :attribute  must be a valid IP address.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida',
    'ipv6' => 'El campo :attribute debe ser una dirección IPV6 válida',
    'json' => 'El campo :attribute ser poseer un formato JSON',
    'list' => 'El campo :attribute debe ser una lista',
    'lowercase' => 'El campo :attribute debe escribirse en minúsculas',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos de :value items',
        'file' => 'El campo :attribute debe pesar menos :value kilobytes',
        'numeric' => 'El campo :attribute debe ser menor que :value',
        'string' => 'El campo :attribute debe tener menos de :value caracteres',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe tener :value items o un número inferior',
        'file' => 'El campo :attribute dene tener un peso menor o igual a :value kilobytes',
        'numeric' => 'El campo :attribute debe ser igual o inferior a :value.',
        'string' => 'El campo :attribute debe tener :value caracteres o un número inferior',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida',
    'max' => [
        'array' => 'El campo :attribute debe tener un máximo de :max items',
        'file' => 'El campo :attribute debe tener un peso máximo de :max kilobytes',
        'numeric' => 'El campo :attribute debe tener un valor máximo de :max',
        'string' => 'El campo :attribute  debe tener un valor máximo de :max caracteres',
    ],
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener un mínimo de :min items',
        'file' => 'El campo :attribute debe pesar al menos :min kilobytes',
        'numeric' => 'El campo :attribute debe tener un valor mínimo de :min',
        'string' => 'El campo :attribute debe tener una longitud mínima de :min caracteres',
    ],
    'min_digits' => 'El campo :attribute debe tener al menoos :min dídgitos',
    'missing' => 'El campo :attribute debe estar incompleto',
    'missing_if' => 'El campo :attribute debe estar incompleto cuando el campo :other sea :value',
    'missing_unless' => 'El campo :attribute debe estar incompleto al menos que el campo :other sea :value',
    'missing_with' => 'El campo :attribute debe estar incompleto cuando alguno de los siguientes valores estén presentes: :values',
    'missing_with_all' => 'El campo :attribute El campo :attribute debe estar incompleto cuando todos los siguientes valores estén presentes: :values',
    'multiple_of' => 'El campo :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El campo :attribute no es válido',
    'not_regex' => 'El campo :attribute no posee un formato correcto',
    'numeric' => 'El campo :attribute debe ser un valor numérico',
    'password' => [
        'letters' => 'La contraseña debe contener al menos una letra',
        'mixed' => 'La contraseña debe contar al menos con una letra mayúscula y minúscula',
        'numbers' => 'La contraseña debe contar al menos con un número',
        'symbols' => 'El campo :attribute  must contain at least one symbol.',
        'uncompromised' => 'La siguiente contraseña se encuentra dentro de los registros de una brecha de seguridad. Por favor, escoja otra contraseña',
    ],
    'present' => 'El campo :attribute debe estar presente',
    'present_if' => 'El campo :attribute debe estar presente cuando :other sea :value.',
    'present_unless' => 'El campo :attribute debe estar presente al menos que :other sea :value.',
    'present_with' => 'El campo :attribute debe estar presente cuando alguno de los siguientes campos esté presente: :values',
    'present_with_all' => 'El campo :attribute debe estar presente cuando todos los siguientes campos estén presentes: :values',
    'prohibited' => 'El campo :attribute no está permitido',
    'prohibited_if' => 'El campo :attribute no está permitido cuando :other sea :value',
    'prohibited_unless' => 'El campo :attribute no está permitido a menos que :other sea :values',
    'prohibits' => 'Si el campo :attribute está relleno, el campo :other debe estar vacío',
    'regex' => 'El patrón del campo :attribute es incorrecto',
    'required' => 'El campo :attribute es obligatorio',
    'required_array_keys' => 'El campo :attribute debe contener las siguientes claves: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando se acepta el campo :other',
    'required_if_declined' => 'El campo :attribute es obligatorio cuando se rechaza el campo :other',
    'required_unless' => 'El campo :attribute es obligatorio a menos que el campo :other sea :values',
    'required_with' => 'El campo :attribute es obligatorio cuando alguno los siguientes valores :values están presentes',
    'required_with_all' => 'El campo :attribute cuando todos los siguientes valores están presentes: :values',
    'required_without' => 'El campo :attribute es obligatorio cuando el valor :values no está presente',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los siguientes valores se encuentra presente: :values',
    'same' => 'El campo :attribute debe coincidir con: :other.',
    'size' => [
        'array' => 'El campo :attribute debe contener una longitud de :size ',
        'file' => 'El campo :attribute debe tener un archivo de un tamaño de :size kilobytes',
        'numeric' => 'El campo :attribute debe tener una longitud de :size.',
        'string' => 'El campo :attribute debe tener una longitud de :size caracteres',
    ],
    'starts_with' => 'El campo :attribute debe empezar con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena de texto',
    'timezone' => 'El campo :attribute  debe tener el valor de una zona horaria correcta',
    'unique' => 'El campo :attribute ya se encuentra en la base de datos',
    'uploaded' => 'El campo :attribute ha fallado al cargarse',
    'uppercase' => 'El campo :attribute debe escribirse en mayúsculas',
    'url' => 'El campo :attribute debe ser una url válida',
    'ulid' => 'El campo :attribute debe ser un ULID válido',
    'uuid' => 'El campo :attribute debe ser un UUID válido',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'nombre'
    ],

];
